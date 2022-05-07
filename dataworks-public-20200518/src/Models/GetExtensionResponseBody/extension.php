<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension\bindEventList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension\eventCategoryList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindEventList) {
            $res['BindEventList'] = [];
            if (null !== $this->bindEventList && \is_array($this->bindEventList)) {
                $n = 0;
                foreach ($this->bindEventList as $item) {
                    $res['BindEventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->detailUrl) {
            $res['DetailUrl'] = $this->detailUrl;
        }
        if (null !== $this->eventCategoryList) {
            $res['EventCategoryList'] = [];
            if (null !== $this->eventCategoryList && \is_array($this->eventCategoryList)) {
                $n = 0;
                foreach ($this->eventCategoryList as $item) {
                    $res['EventCategoryList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return extension
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindEventList'])) {
            if (!empty($map['BindEventList'])) {
                $model->bindEventList = [];
                $n                    = 0;
                foreach ($map['BindEventList'] as $item) {
                    $model->bindEventList[$n++] = null !== $item ? bindEventList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DetailUrl'])) {
            $model->detailUrl = $map['DetailUrl'];
        }
        if (isset($map['EventCategoryList'])) {
            if (!empty($map['EventCategoryList'])) {
                $model->eventCategoryList = [];
                $n                        = 0;
                foreach ($map['EventCategoryList'] as $item) {
                    $model->eventCategoryList[$n++] = null !== $item ? eventCategoryList::fromMap($item) : $item;
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
