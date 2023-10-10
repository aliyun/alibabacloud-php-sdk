<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class emptyDirs extends Model
{
    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $subPathExpr;
    protected $_name = [
        'mountPath'   => 'MountPath',
        'name'        => 'Name',
        'readOnly'    => 'ReadOnly',
        'subPathExpr' => 'SubPathExpr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->subPathExpr) {
            $res['SubPathExpr'] = $this->subPathExpr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emptyDirs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['SubPathExpr'])) {
            $model->subPathExpr = $map['SubPathExpr'];
        }

        return $model;
    }
}
