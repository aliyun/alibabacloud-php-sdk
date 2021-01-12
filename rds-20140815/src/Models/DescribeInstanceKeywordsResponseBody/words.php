<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponseBody;

use AlibabaCloud\Tea\Model;

class words extends Model
{
    /**
     * @var string[]
     */
    public $word;
    protected $_name = [
        'word' => 'word',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->word) {
            $res['word'] = $this->word;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return words
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['word'])) {
            if (!empty($map['word'])) {
                $model->word = $map['word'];
            }
        }

        return $model;
    }
}
