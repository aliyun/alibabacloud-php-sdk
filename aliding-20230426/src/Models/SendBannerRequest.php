<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendBannerRequest\tenantContext;

class SendBannerRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $content;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'content' => 'Content',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                foreach ($this->content as $key1 => $value1) {
                    $res['Content'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                foreach ($map['Content'] as $key1 => $value1) {
                    $model->content[$key1] = $value1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
