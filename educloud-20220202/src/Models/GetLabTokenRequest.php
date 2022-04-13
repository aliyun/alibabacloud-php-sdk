<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models;

use AlibabaCloud\Tea\Model;

class GetLabTokenRequest extends Model
{
    /**
     * @var string
     */
    public $labId;

    /**
     * @var string
     */
    public $ramUid;
    protected $_name = [
        'labId'  => 'LabId',
        'ramUid' => 'RamUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }
        if (null !== $this->ramUid) {
            $res['RamUid'] = $this->ramUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLabTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }
        if (isset($map['RamUid'])) {
            $model->ramUid = $map['RamUid'];
        }

        return $model;
    }
}
