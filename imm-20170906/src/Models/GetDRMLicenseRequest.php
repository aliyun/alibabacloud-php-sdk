<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetDRMLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $DRMType;

    /**
     * @var string
     */
    public $DRMLicense;
    protected $_name = [
        'project'    => 'Project',
        'DRMType'    => 'DRMType',
        'DRMLicense' => 'DRMLicense',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->DRMType) {
            $res['DRMType'] = $this->DRMType;
        }
        if (null !== $this->DRMLicense) {
            $res['DRMLicense'] = $this->DRMLicense;
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
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['DRMType'])) {
            $model->DRMType = $map['DRMType'];
        }
        if (isset($map['DRMLicense'])) {
            $model->DRMLicense = $map['DRMLicense'];
        }

        return $model;
    }
}
