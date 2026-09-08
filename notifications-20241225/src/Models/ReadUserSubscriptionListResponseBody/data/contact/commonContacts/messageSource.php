<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data\contact\commonContacts;

use AlibabaCloud\Dara\Model;

class messageSource extends Model
{
    /**
     * @var string[]
     */
    public $keywordBlacklist;

    /**
     * @var string[]
     */
    public $keywordWhitelist;
    protected $_name = [
        'keywordBlacklist' => 'KeywordBlacklist',
        'keywordWhitelist' => 'KeywordWhitelist',
    ];

    public function validate()
    {
        if (\is_array($this->keywordBlacklist)) {
            Model::validateArray($this->keywordBlacklist);
        }
        if (\is_array($this->keywordWhitelist)) {
            Model::validateArray($this->keywordWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywordBlacklist) {
            if (\is_array($this->keywordBlacklist)) {
                $res['KeywordBlacklist'] = [];
                $n1 = 0;
                foreach ($this->keywordBlacklist as $item1) {
                    $res['KeywordBlacklist'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keywordWhitelist) {
            if (\is_array($this->keywordWhitelist)) {
                $res['KeywordWhitelist'] = [];
                $n1 = 0;
                foreach ($this->keywordWhitelist as $item1) {
                    $res['KeywordWhitelist'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['KeywordBlacklist'])) {
            if (!empty($map['KeywordBlacklist'])) {
                $model->keywordBlacklist = [];
                $n1 = 0;
                foreach ($map['KeywordBlacklist'] as $item1) {
                    $model->keywordBlacklist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KeywordWhitelist'])) {
            if (!empty($map['KeywordWhitelist'])) {
                $model->keywordWhitelist = [];
                $n1 = 0;
                foreach ($map['KeywordWhitelist'] as $item1) {
                    $model->keywordWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
