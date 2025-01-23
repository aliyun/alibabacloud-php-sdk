<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension\bindEventList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension\eventCategoryList;

class extension extends Model
{
    /**
     * @var bindEventList[]
     */
    public $bindEventList;
    /**
     * @var string
     */
    public $detailUrl;
    /**
     * @var eventCategoryList[]
     */
    public $eventCategoryList;
    /**
     * @var string
     */
    public $extensionCode;
    /**
     * @var string
     */
    public $extensionDesc;
    /**
     * @var string
     */
    public $extensionName;
    /**
     * @var string
     */
    public $helpDocUrl;
    /**
     * @var string
     */
    public $optionSetting;
    /**
     * @var string
     */
    public $parameterSetting;
    /**
     * @var int
     */
    public $projectTesting;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'bindEventList'     => 'BindEventList',
        'detailUrl'         => 'DetailUrl',
        'eventCategoryList' => 'EventCategoryList',
        'extensionCode'     => 'ExtensionCode',
        'extensionDesc'     => 'ExtensionDesc',
        'extensionName'     => 'ExtensionName',
        'helpDocUrl'        => 'HelpDocUrl',
        'optionSetting'     => 'OptionSetting',
        'parameterSetting'  => 'ParameterSetting',
        'projectTesting'    => 'ProjectTesting',
        'status'            => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->bindEventList)) {
            Model::validateArray($this->bindEventList);
        }
        if (\is_array($this->eventCategoryList)) {
            Model::validateArray($this->eventCategoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindEventList) {
            if (\is_array($this->bindEventList)) {
                $res['BindEventList'] = [];
                $n1                   = 0;
                foreach ($this->bindEventList as $item1) {
                    $res['BindEventList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->detailUrl) {
            $res['DetailUrl'] = $this->detailUrl;
        }

        if (null !== $this->eventCategoryList) {
            if (\is_array($this->eventCategoryList)) {
                $res['EventCategoryList'] = [];
                $n1                       = 0;
                foreach ($this->eventCategoryList as $item1) {
                    $res['EventCategoryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->extensionCode) {
            $res['ExtensionCode'] = $this->extensionCode;
        }

        if (null !== $this->extensionDesc) {
            $res['ExtensionDesc'] = $this->extensionDesc;
        }

        if (null !== $this->extensionName) {
            $res['ExtensionName'] = $this->extensionName;
        }

        if (null !== $this->helpDocUrl) {
            $res['HelpDocUrl'] = $this->helpDocUrl;
        }

        if (null !== $this->optionSetting) {
            $res['OptionSetting'] = $this->optionSetting;
        }

        if (null !== $this->parameterSetting) {
            $res['ParameterSetting'] = $this->parameterSetting;
        }

        if (null !== $this->projectTesting) {
            $res['ProjectTesting'] = $this->projectTesting;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BindEventList'])) {
            if (!empty($map['BindEventList'])) {
                $model->bindEventList = [];
                $n1                   = 0;
                foreach ($map['BindEventList'] as $item1) {
                    $model->bindEventList[$n1++] = bindEventList::fromMap($item1);
                }
            }
        }

        if (isset($map['DetailUrl'])) {
            $model->detailUrl = $map['DetailUrl'];
        }

        if (isset($map['EventCategoryList'])) {
            if (!empty($map['EventCategoryList'])) {
                $model->eventCategoryList = [];
                $n1                       = 0;
                foreach ($map['EventCategoryList'] as $item1) {
                    $model->eventCategoryList[$n1++] = eventCategoryList::fromMap($item1);
                }
            }
        }

        if (isset($map['ExtensionCode'])) {
            $model->extensionCode = $map['ExtensionCode'];
        }

        if (isset($map['ExtensionDesc'])) {
            $model->extensionDesc = $map['ExtensionDesc'];
        }

        if (isset($map['ExtensionName'])) {
            $model->extensionName = $map['ExtensionName'];
        }

        if (isset($map['HelpDocUrl'])) {
            $model->helpDocUrl = $map['HelpDocUrl'];
        }

        if (isset($map['OptionSetting'])) {
            $model->optionSetting = $map['OptionSetting'];
        }

        if (isset($map['ParameterSetting'])) {
            $model->parameterSetting = $map['ParameterSetting'];
        }

        if (isset($map['ProjectTesting'])) {
            $model->projectTesting = $map['ProjectTesting'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
