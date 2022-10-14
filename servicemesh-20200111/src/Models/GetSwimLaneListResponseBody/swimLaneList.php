<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneListResponseBody;

use AlibabaCloud\Tea\Model;

class swimLaneList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $ingressRule;

    /**
     * @var string
     */
    public $ingressService;

    /**
     * @var string
     */
    public $labelSelectorKey;

    /**
     * @var string
     */
    public $labelSelectorValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceList;
    protected $_name = [
        'groupName'          => 'GroupName',
        'ingressRule'        => 'IngressRule',
        'ingressService'     => 'IngressService',
        'labelSelectorKey'   => 'LabelSelectorKey',
        'labelSelectorValue' => 'LabelSelectorValue',
        'name'               => 'Name',
        'serviceList'        => 'ServiceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ingressRule) {
            $res['IngressRule'] = $this->ingressRule;
        }
        if (null !== $this->ingressService) {
            $res['IngressService'] = $this->ingressService;
        }
        if (null !== $this->labelSelectorKey) {
            $res['LabelSelectorKey'] = $this->labelSelectorKey;
        }
        if (null !== $this->labelSelectorValue) {
            $res['LabelSelectorValue'] = $this->labelSelectorValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceList) {
            $res['ServiceList'] = $this->serviceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return swimLaneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IngressRule'])) {
            $model->ingressRule = $map['IngressRule'];
        }
        if (isset($map['IngressService'])) {
            $model->ingressService = $map['IngressService'];
        }
        if (isset($map['LabelSelectorKey'])) {
            $model->labelSelectorKey = $map['LabelSelectorKey'];
        }
        if (isset($map['LabelSelectorValue'])) {
            $model->labelSelectorValue = $map['LabelSelectorValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceList'])) {
            $model->serviceList = $map['ServiceList'];
        }

        return $model;
    }
}
