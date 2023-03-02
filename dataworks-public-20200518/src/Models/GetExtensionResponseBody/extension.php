<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension\bindEventList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension\eventCategoryList;
use AlibabaCloud\Tea\Model;

class extension extends Model
{
    /**
     * @description The extension point events.
     *
     * @var bindEventList[]
     */
    public $bindEventList;

    /**
     * @description The URL of the help document about the extension. You can visit the URL for the details of the extension.
     *
     * @example https://www.aliyun.com/
     *
     * @var string
     */
    public $detailUrl;

    /**
     * @description The types of the events.
     *
     * @var eventCategoryList[]
     */
    public $eventCategoryList;

    /**
     * @description The unique code of the extension.
     *
     * @example ce4*********086da5
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description The description of the extension.
     *
     * @var string
     */
    public $extensionDesc;

    /**
     * @description The name of the extension.
     *
     * @var string
     */
    public $extensionName;

    /**
     * @description The URL of the help document about the extension.
     *
     * @example https://www.aliyun.com/
     *
     * @var string
     */
    public $helpDocUrl;

    /**
     * @description The option settings of the extension.
     *
     * @var string
     */
    public $optionSetting;

    /**
     * @description The parameter settings of the extension. For more information, visit https://www.alibabacloud.com/help/en/dataworks/latest/set-extension-parameters.
     *
     * @example extension.project.disabled=projectId1,projectId2,projectId3
     *
     * @var string
     */
    public $parameterSetting;

    /**
     * @description The workspace for testing. If the extension is in the testing state, the extension can be used only in the workspace for testing.
     *
     * @example 13552
     *
     * @var int
     */
    public $projectTesting;

    /**
     * @description The state of the extension. 0: testing. 1: publishing. 3: disabled. 4: approving. 5: approved. 6: approval failed.
     *
     * @example 0
     *
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
