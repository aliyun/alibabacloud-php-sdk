<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class GenerateDynamicImageAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $urlObject;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'urlObject' => 'UrlObject',
        'operation' => 'Operation',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
        Model::validateRequired('operation', $this->operation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->urlObject) {
            $res['UrlObject'] = $this->urlObject;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDynamicImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
