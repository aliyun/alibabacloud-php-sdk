<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SaveTaskForOfficialFileCustomRequest extends Model
{
    /**
     * @var int
     */
    public $endAcceptTime;

    /**
     * @var int
     */
    public $startAcceptTime;
    protected $_name = [
        'endAcceptTime'   => 'EndAcceptTime',
        'startAcceptTime' => 'StartAcceptTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endAcceptTime) {
            $res['EndAcceptTime'] = $this->endAcceptTime;
        }
        if (null !== $this->startAcceptTime) {
            $res['StartAcceptTime'] = $this->startAcceptTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveTaskForOfficialFileCustomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndAcceptTime'])) {
            $model->endAcceptTime = $map['EndAcceptTime'];
        }
        if (isset($map['StartAcceptTime'])) {
            $model->startAcceptTime = $map['StartAcceptTime'];
        }

        return $model;
    }
}
