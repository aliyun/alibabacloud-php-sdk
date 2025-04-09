<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody\result\limiterInfo;

class result extends Model
{
    /**
     * @var limiterInfo
     */
    public $limiterInfo;

    /**
     * @var mixed[]
     */
    public $quotaInfo;
    protected $_name = [
        'limiterInfo' => 'limiterInfo',
        'quotaInfo' => 'quotaInfo',
    ];

    public function validate()
    {
        if (null !== $this->limiterInfo) {
            $this->limiterInfo->validate();
        }
        if (\is_array($this->quotaInfo)) {
            Model::validateArray($this->quotaInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limiterInfo) {
            $res['limiterInfo'] = null !== $this->limiterInfo ? $this->limiterInfo->toArray($noStream) : $this->limiterInfo;
        }

        if (null !== $this->quotaInfo) {
            if (\is_array($this->quotaInfo)) {
                $res['quotaInfo'] = [];
                foreach ($this->quotaInfo as $key1 => $value1) {
                    $res['quotaInfo'][$key1] = $value1;
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
        if (isset($map['limiterInfo'])) {
            $model->limiterInfo = limiterInfo::fromMap($map['limiterInfo']);
        }

        if (isset($map['quotaInfo'])) {
            if (!empty($map['quotaInfo'])) {
                $model->quotaInfo = [];
                foreach ($map['quotaInfo'] as $key1 => $value1) {
                    $model->quotaInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
