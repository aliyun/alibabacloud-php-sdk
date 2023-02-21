<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcCoreTeamsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $memberIntroduction;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $memberPosition;
    protected $_name = [
        'entName'            => 'EntName',
        'memberIntroduction' => 'MemberIntroduction',
        'memberName'         => 'MemberName',
        'memberPosition'     => 'MemberPosition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->memberIntroduction) {
            $res['MemberIntroduction'] = $this->memberIntroduction;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->memberPosition) {
            $res['MemberPosition'] = $this->memberPosition;
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
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['MemberIntroduction'])) {
            $model->memberIntroduction = $map['MemberIntroduction'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['MemberPosition'])) {
            $model->memberPosition = $map['MemberPosition'];
        }

        return $model;
    }
}
