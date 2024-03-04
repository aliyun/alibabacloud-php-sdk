<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class paramsConfig extends Model
{
    /**
     * @example src_path,dst_file_path
     *
     * @var string[]
     */
    public $paramsSrcDstFilepath;
    protected $_name = [
        'paramsSrcDstFilepath' => 'params_src_dst_filepath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramsSrcDstFilepath) {
            $res['params_src_dst_filepath'] = $this->paramsSrcDstFilepath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['params_src_dst_filepath'])) {
            if (!empty($map['params_src_dst_filepath'])) {
                $model->paramsSrcDstFilepath = $map['params_src_dst_filepath'];
            }
        }

        return $model;
    }
}
