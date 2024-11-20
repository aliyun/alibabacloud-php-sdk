<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobResponseBody\results;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The details of the analysis result. The value is a JSON string. For more information about the parameters of different result types, see the "Parameters of different result types" section of this topic.
     *
     * @example {"title":"example-title-****"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The type of the analysis result.
     *
     *   The type of the analysis result based on Smart tagging V1.0. Valid values:
     *
     * 5.  NLP: the natural language processing (NLP)-based result. By default, this type of result is not returned.
     *
     *   The type of the analysis result based on Smart tagging V2.0. Valid values:
     *
     * 2.  Meta: the information about the video file, such as the title of the video. By default, this type of information is not returned.
     *
     *   The type of the analysis result based on Smart tagging V2.0-custom. Valid values:
     *
     * 2.  Meta: the information about the video file, such as the title of the video. By default, this type of information is not returned.
     * @example Meta
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
     * @return result
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
