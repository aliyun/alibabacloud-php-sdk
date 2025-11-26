<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetPrometheusUserSettingResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $prometheusUserSetting;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusUserSetting' => 'prometheusUserSetting',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->prometheusUserSetting)) {
            Model::validateArray($this->prometheusUserSetting);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusUserSetting) {
            if (\is_array($this->prometheusUserSetting)) {
                $res['prometheusUserSetting'] = [];
                foreach ($this->prometheusUserSetting as $key1 => $value1) {
                    $res['prometheusUserSetting'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['prometheusUserSetting'])) {
            if (!empty($map['prometheusUserSetting'])) {
                $model->prometheusUserSetting = [];
                foreach ($map['prometheusUserSetting'] as $key1 => $value1) {
                    $model->prometheusUserSetting[$key1] = $value1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
