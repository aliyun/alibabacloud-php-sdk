<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSasTrialShrinkRequest extends Model
{
    /**
     * @description Specifies whether the request is redirected from the Elastic Compute Service (ECS) console. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $fromEcs;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The reason why you apply for the trial. You must specify the reason for the second trial.
     *
     * @var string
     */
    public $requestFormShrink;

    /**
     * @description The trial type. Valid values:
     *
     *   **0**: trial prohibited
     *   **1**: first trial
     *   **2**: second trial
     *
     * >  You can call the [GetCanTrySas](https://help.aliyun.com/document_detail/2623574.html) operation to obtain the trial type. You can start a trial only if this parameter is not set to 0.
     * @example 1
     *
     * @var int
     */
    public $tryType;

    /**
     * @description The trial edition. Valid values:
     *
     *   **3**: Enterprise
     *   **7**: Ultimate
     *
     * >  You can call the [GetCanTrySas](https://help.aliyun.com/document_detail/2623574.html) operation to obtain the trial edition.
     * @example 7
     *
     * @var int
     */
    public $tryVersion;
    protected $_name = [
        'fromEcs'           => 'FromEcs',
        'lang'              => 'Lang',
        'requestFormShrink' => 'RequestForm',
        'tryType'           => 'TryType',
        'tryVersion'        => 'TryVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromEcs) {
            $res['FromEcs'] = $this->fromEcs;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->requestFormShrink) {
            $res['RequestForm'] = $this->requestFormShrink;
        }
        if (null !== $this->tryType) {
            $res['TryType'] = $this->tryType;
        }
        if (null !== $this->tryVersion) {
            $res['TryVersion'] = $this->tryVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSasTrialShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromEcs'])) {
            $model->fromEcs = $map['FromEcs'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RequestForm'])) {
            $model->requestFormShrink = $map['RequestForm'];
        }
        if (isset($map['TryType'])) {
            $model->tryType = $map['TryType'];
        }
        if (isset($map['TryVersion'])) {
            $model->tryVersion = $map['TryVersion'];
        }

        return $model;
    }
}
