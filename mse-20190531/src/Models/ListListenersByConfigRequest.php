<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigRequest\extGrayRules;

class ListListenersByConfigRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var extGrayRules[]
     */
    public $extGrayRules;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'dataId' => 'DataId',
        'extGrayRules' => 'ExtGrayRules',
        'group' => 'Group',
        'instanceId' => 'InstanceId',
        'namespaceId' => 'NamespaceId',
        'requestPars' => 'RequestPars',
    ];

    public function validate()
    {
        if (\is_array($this->extGrayRules)) {
            Model::validateArray($this->extGrayRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->extGrayRules) {
            if (\is_array($this->extGrayRules)) {
                $res['ExtGrayRules'] = [];
                $n1 = 0;
                foreach ($this->extGrayRules as $item1) {
                    $res['ExtGrayRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['ExtGrayRules'])) {
            if (!empty($map['ExtGrayRules'])) {
                $model->extGrayRules = [];
                $n1 = 0;
                foreach ($map['ExtGrayRules'] as $item1) {
                    $model->extGrayRules[$n1] = extGrayRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}
