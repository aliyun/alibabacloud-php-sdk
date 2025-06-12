<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class summaryIndex extends Model
{
    /**
     * @var string
     */
    public $keywords;
    protected $_name = [
        'keywords' => 'Keywords',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }

        return $model;
    }
}
