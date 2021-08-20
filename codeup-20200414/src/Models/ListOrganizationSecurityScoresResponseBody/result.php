<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationSecurityScoresResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationSecurityScoresResponseBody\result\organizationSecurityScore;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var organizationSecurityScore
     */
    public $organizationSecurityScore;
    protected $_name = [
        'id'                        => 'Id',
        'enable'                    => 'Enable',
        'organizationId'            => 'OrganizationId',
        'organizationSecurityScore' => 'OrganizationSecurityScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->organizationSecurityScore) {
            $res['OrganizationSecurityScore'] = null !== $this->organizationSecurityScore ? $this->organizationSecurityScore->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OrganizationSecurityScore'])) {
            $model->organizationSecurityScore = organizationSecurityScore::fromMap($map['OrganizationSecurityScore']);
        }

        return $model;
    }
}
