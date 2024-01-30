<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models;

use AlibabaCloud\Tea\Model;

class YaochiSuggestRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $suggestText;
    protected $_name = [
        'suggestText' => 'SuggestText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suggestText) {
            $res['SuggestText'] = $this->suggestText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return YaochiSuggestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuggestText'])) {
            $model->suggestText = $map['SuggestText'];
        }

        return $model;
    }
}
