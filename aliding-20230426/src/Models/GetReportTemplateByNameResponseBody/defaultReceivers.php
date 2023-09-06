<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody;

use AlibabaCloud\Tea\Model;

class defaultReceivers extends Model
{
    /**
     * @var string
     */
    public $userName;

    /**
     * @example 1234
     *
     * @var string
     */
    public $userid;
    protected $_name = [
        'userName' => 'UserName',
        'userid'   => 'Userid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userid) {
            $res['Userid'] = $this->userid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultReceivers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Userid'])) {
            $model->userid = $map['Userid'];
        }

        return $model;
    }
}
