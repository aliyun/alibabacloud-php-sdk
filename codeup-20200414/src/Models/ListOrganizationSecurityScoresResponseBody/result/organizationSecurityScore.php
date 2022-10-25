<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationSecurityScoresResponseBody\result;

use AlibabaCloud\Tea\Model;

class organizationSecurityScore extends Model
{
    /**
     * @var int
     */
    public $authorityControlScore;

    /**
     * @var int
     */
    public $codeContentScore;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $memberBehaviorScore;
    protected $_name = [
        'authorityControlScore' => 'AuthorityControlScore',
        'codeContentScore'      => 'CodeContentScore',
        'level'                 => 'Level',
        'memberBehaviorScore'   => 'MemberBehaviorScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityControlScore) {
            $res['AuthorityControlScore'] = $this->authorityControlScore;
        }
        if (null !== $this->codeContentScore) {
            $res['CodeContentScore'] = $this->codeContentScore;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->memberBehaviorScore) {
            $res['MemberBehaviorScore'] = $this->memberBehaviorScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organizationSecurityScore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityControlScore'])) {
            $model->authorityControlScore = $map['AuthorityControlScore'];
        }
        if (isset($map['CodeContentScore'])) {
            $model->codeContentScore = $map['CodeContentScore'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MemberBehaviorScore'])) {
            $model->memberBehaviorScore = $map['MemberBehaviorScore'];
        }

        return $model;
    }
}
