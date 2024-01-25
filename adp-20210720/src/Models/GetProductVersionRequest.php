<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetProductVersionRequest extends Model
{
    /**
     * @var bool
     */
    public $withDocumentationURL;

    /**
     * @var bool
     */
    public $withExtendResourceURL;
    protected $_name = [
        'withDocumentationURL'  => 'withDocumentationURL',
        'withExtendResourceURL' => 'withExtendResourceURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withDocumentationURL) {
            $res['withDocumentationURL'] = $this->withDocumentationURL;
        }
        if (null !== $this->withExtendResourceURL) {
            $res['withExtendResourceURL'] = $this->withExtendResourceURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withDocumentationURL'])) {
            $model->withDocumentationURL = $map['withDocumentationURL'];
        }
        if (isset($map['withExtendResourceURL'])) {
            $model->withExtendResourceURL = $map['withExtendResourceURL'];
        }

        return $model;
    }
}
