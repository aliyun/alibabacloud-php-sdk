<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList\alarmHistory;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @var string[]
     */
    public $contact;
    protected $_name = [
        'contact' => 'Contact',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contact'])) {
            if (!empty($map['Contact'])) {
                $model->contact = $map['Contact'];
            }
        }

        return $model;
    }
}
