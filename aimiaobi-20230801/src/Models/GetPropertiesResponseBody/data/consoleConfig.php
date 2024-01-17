<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data;

use AlibabaCloud\Tea\Model;

class consoleConfig extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $tipContent;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'tipContent' => 'TipContent',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tipContent) {
            $res['TipContent'] = $this->tipContent;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consoleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TipContent'])) {
            $model->tipContent = $map['TipContent'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
