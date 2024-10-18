<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest;

use AlibabaCloud\Tea\Model;

class scheduler extends Model
{
    /**
     * @description The scheduler type.
     *
     * @example SLURM
     *
     * @var string
     */
    public $type;

    /**
     * @description The scheduler version.
     *
     * @example 22.05.8
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'type'    => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduler
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
