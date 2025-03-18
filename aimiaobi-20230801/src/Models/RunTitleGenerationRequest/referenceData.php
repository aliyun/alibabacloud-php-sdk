<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationRequest;

use AlibabaCloud\Tea\Model;

class referenceData extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $contents;
    protected $_name = [
        'contents' => 'Contents',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = $map['Contents'];
            }
        }

        return $model;
    }
}
