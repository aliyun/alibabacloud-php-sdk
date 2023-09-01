<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListImageLabelsRequest extends Model
{
    /**
     * @example image-4c62******53uor
     *
     * @var string
     */
    public $imageId;

    /**
     * @example system.framework=XGBoost 1.6.0,system.official=true
     *
     * @var string
     */
    public $labelFilter;

    /**
     * @example system.framework,system.official
     *
     * @var string
     */
    public $labelKeys;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'imageId'     => 'ImageId',
        'labelFilter' => 'LabelFilter',
        'labelKeys'   => 'LabelKeys',
        'region'      => 'Region',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->labelFilter) {
            $res['LabelFilter'] = $this->labelFilter;
        }
        if (null !== $this->labelKeys) {
            $res['LabelKeys'] = $this->labelKeys;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImageLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['LabelFilter'])) {
            $model->labelFilter = $map['LabelFilter'];
        }
        if (isset($map['LabelKeys'])) {
            $model->labelKeys = $map['LabelKeys'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
