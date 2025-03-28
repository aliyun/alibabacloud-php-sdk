<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenScoreThreadResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $socreThread;

    /**
     * @var string[]
     */
    public $socreThreadDate;
    protected $_name = [
        'socreThread' => 'SocreThread',
        'socreThreadDate' => 'SocreThreadDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->socreThread) {
            $res['SocreThread'] = $this->socreThread;
        }
        if (null !== $this->socreThreadDate) {
            $res['SocreThreadDate'] = $this->socreThreadDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SocreThread'])) {
            if (!empty($map['SocreThread'])) {
                $model->socreThread = $map['SocreThread'];
            }
        }
        if (isset($map['SocreThreadDate'])) {
            if (!empty($map['SocreThreadDate'])) {
                $model->socreThreadDate = $map['SocreThreadDate'];
            }
        }

        return $model;
    }
}
