<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationSecurityScoresResponseBody\result;

use AlibabaCloud\Tea\Model;

class organizationSecurityScore extends Model
{
    /**
     * @var int
     */
    public $codeContentScore;

    /**
     * @var int
     */
    public $memberBehaviorScore;

    /**
     * @var int
     */
    public $authorityControlScore;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'codeContentScore'      => 'CodeContentScore',
        'memberBehaviorScore'   => 'MemberBehaviorScore',
        'authorityControlScore' => 'AuthorityControlScore',
        'level'                 => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeContentScore) {
            $res['CodeContentScore'] = $this->codeContentScore;
        }
        if (null !== $this->memberBehaviorScore) {
            $res['MemberBehaviorScore'] = $this->memberBehaviorScore;
        }
        if (null !== $this->authorityControlScore) {
            $res['AuthorityControlScore'] = $this->authorityControlScore;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['CodeContentScore'])) {
            $model->codeContentScore = $map['CodeContentScore'];
        }
        if (isset($map['MemberBehaviorScore'])) {
            $model->memberBehaviorScore = $map['MemberBehaviorScore'];
        }
        if (isset($map['AuthorityControlScore'])) {
            $model->authorityControlScore = $map['AuthorityControlScore'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
