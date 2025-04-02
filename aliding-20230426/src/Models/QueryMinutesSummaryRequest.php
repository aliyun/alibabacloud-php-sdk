<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryRequest\tenantContext;

class QueryMinutesSummaryRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var string[]
     */
    public $summaryTypeList;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'conferenceId' => 'conferenceId',
        'summaryTypeList' => 'summaryTypeList',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->summaryTypeList)) {
            Model::validateArray($this->summaryTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->summaryTypeList) {
            if (\is_array($this->summaryTypeList)) {
                $res['summaryTypeList'] = [];
                $n1 = 0;
                foreach ($this->summaryTypeList as $item1) {
                    $res['summaryTypeList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        if (isset($map['summaryTypeList'])) {
            if (!empty($map['summaryTypeList'])) {
                $model->summaryTypeList = [];
                $n1 = 0;
                foreach ($map['summaryTypeList'] as $item1) {
                    $model->summaryTypeList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
