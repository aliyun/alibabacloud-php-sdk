<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\VerifyMigrationTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\VerifyMigrationTaskResponseBody\data\unSupportedRouteRules;

class data extends Model
{
    /**
     * @var bool
     */
    public $isSupported;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var unSupportedRouteRules[]
     */
    public $unSupportedRouteRules;
    protected $_name = [
        'isSupported' => 'isSupported',
        'message' => 'message',
        'success' => 'success',
        'unSupportedRouteRules' => 'unSupportedRouteRules',
    ];

    public function validate()
    {
        if (\is_array($this->unSupportedRouteRules)) {
            Model::validateArray($this->unSupportedRouteRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isSupported) {
            $res['isSupported'] = $this->isSupported;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->unSupportedRouteRules) {
            if (\is_array($this->unSupportedRouteRules)) {
                $res['unSupportedRouteRules'] = [];
                $n1 = 0;
                foreach ($this->unSupportedRouteRules as $item1) {
                    $res['unSupportedRouteRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['isSupported'])) {
            $model->isSupported = $map['isSupported'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['unSupportedRouteRules'])) {
            if (!empty($map['unSupportedRouteRules'])) {
                $model->unSupportedRouteRules = [];
                $n1 = 0;
                foreach ($map['unSupportedRouteRules'] as $item1) {
                    $model->unSupportedRouteRules[$n1] = unSupportedRouteRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
