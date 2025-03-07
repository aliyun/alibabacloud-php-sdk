<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughData\standardSmartTagJob;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The result data. The value is a JSON string. For information about the data structures of different data types<props="china">, see [Description of the Results parameter](https://help.aliyun.com/zh/ims/developer-reference/api-ice-2020-11-09-querysmarttagjob?spm=a2c4g.11186623.0.0.521d48b7KfapOL#api-detail-40).
     *
     * @example {"autoChapters": [...]}
     *
     * @var string
     */
    public $data;

    /**
     * @description The tagging type. Valid values:
     *
     *   NLP: natural language processing (NLP)-based tagging
     *
     * @example NLP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'Data',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
