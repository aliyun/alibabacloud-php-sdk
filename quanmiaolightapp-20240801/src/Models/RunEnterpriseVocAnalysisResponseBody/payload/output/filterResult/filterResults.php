<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponseBody\payload\output\filterResult;

use AlibabaCloud\Tea\Model;

class filterResults extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hit;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'hit' => 'hit',
        'tagName' => 'tagName',
        'tagValue' => 'tagValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hit) {
            $res['hit'] = $this->hit;
        }
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }
        if (null !== $this->tagValue) {
            $res['tagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hit'])) {
            $model->hit = $map['hit'];
        }
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }
        if (isset($map['tagValue'])) {
            $model->tagValue = $map['tagValue'];
        }

        return $model;
    }
}
