<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class ReferenceTag extends Model
{
    /**
     * @var string
     */
    public $referenceContent;

    /**
     * @var string
     */
    public $referenceTitle;
    protected $_name = [
        'referenceContent' => 'referenceContent',
        'referenceTitle'   => 'referenceTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->referenceContent) {
            $res['referenceContent'] = $this->referenceContent;
        }
        if (null !== $this->referenceTitle) {
            $res['referenceTitle'] = $this->referenceTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReferenceTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['referenceContent'])) {
            $model->referenceContent = $map['referenceContent'];
        }
        if (isset($map['referenceTitle'])) {
            $model->referenceTitle = $map['referenceTitle'];
        }

        return $model;
    }
}
