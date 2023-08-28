<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyFileRequest extends Model
{
    /**
     * @description The parameters in the request body
     *
     * @example ""
     *
     * @var string
     */
    public $content;

    /**
     * @description auditing
     *
     * @example 1
     *
     * @var int
     */
    public $partition;

    /**
     * @description ha-cn-tl32m2c4u01@ha-cn-tl32m2c4u01_00@bj_vpc_domain_1@automobile_vector@index_config_edit
     *
     * @example /schemas/generation_schema.json
     *
     * @var string
     */
    public $fileName;
    protected $_name = [
        'content'   => 'content',
        'partition' => 'partition',
        'fileName'  => 'fileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
