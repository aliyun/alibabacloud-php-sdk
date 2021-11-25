<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetDRMLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $DRMLicense;

    /**
     * @var string
     */
    public $DRMType;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'DRMLicense' => 'DRMLicense',
        'DRMType'    => 'DRMType',
        'project'    => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DRMLicense) {
            $res['DRMLicense'] = $this->DRMLicense;
        }
        if (null !== $this->DRMType) {
            $res['DRMType'] = $this->DRMType;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDRMLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DRMLicense'])) {
            $model->DRMLicense = $map['DRMLicense'];
        }
        if (isset($map['DRMType'])) {
            $model->DRMType = $map['DRMType'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
