<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class DetectQRCodesRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $srcUris;
    protected $_name = [
        'project' => 'Project',
        'srcUris' => 'SrcUris',
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
        if (null !== $this->srcUris) {
            $res['SrcUris'] = $this->srcUris;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectQRCodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SrcUris'])) {
            $model->srcUris = $map['SrcUris'];
        }

        return $model;
    }
}
