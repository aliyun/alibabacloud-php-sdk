<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class GetAdvanceConfigFileRequest extends Model
{
    /**
     * @description The name of the file
     *
     * @example /intervene_dict/chn_ecommerce_general.dict
     *
     * @var string
     */
    public $fileName;
    protected $_name = [
        'fileName' => 'fileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAdvanceConfigFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
