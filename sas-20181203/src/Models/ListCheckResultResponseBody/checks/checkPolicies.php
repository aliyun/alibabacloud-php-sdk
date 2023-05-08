<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody\checks;

use AlibabaCloud\Tea\Model;

class checkPolicies extends Model
{
    /**
     * @description The requirement item ID of the check item.
     *
     * @example 2
     *
     * @var int
     */
    public $requirementId;

    /**
     * @description The display name of the requirement item for the check item.
     *
     * @example Alibaba cloud OSS best security practices
     *
     * @var string
     */
    public $requirementShowName;

    /**
     * @description The section ID of the check item.
     *
     * @example 3
     *
     * @var int
     */
    public $sectionId;

    /**
     * @description The section display name of the check item.
     *
     * @example Log Audit
     *
     * @var string
     */
    public $sectionShowName;

    /**
     * @description The standard ID of the check item.
     *
     * @example 1
     *
     * @var int
     */
    public $standardId;

    /**
     * @description The standard display name of the check item.
     *
     * @example Best security practices
     *
     * @var string
     */
    public $standardShowName;
    protected $_name = [
        'requirementId'       => 'RequirementId',
        'requirementShowName' => 'RequirementShowName',
        'sectionId'           => 'SectionId',
        'sectionShowName'     => 'SectionShowName',
        'standardId'          => 'StandardId',
        'standardShowName'    => 'StandardShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requirementId) {
            $res['RequirementId'] = $this->requirementId;
        }
        if (null !== $this->requirementShowName) {
            $res['RequirementShowName'] = $this->requirementShowName;
        }
        if (null !== $this->sectionId) {
            $res['SectionId'] = $this->sectionId;
        }
        if (null !== $this->sectionShowName) {
            $res['SectionShowName'] = $this->sectionShowName;
        }
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }
        if (null !== $this->standardShowName) {
            $res['StandardShowName'] = $this->standardShowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequirementId'])) {
            $model->requirementId = $map['RequirementId'];
        }
        if (isset($map['RequirementShowName'])) {
            $model->requirementShowName = $map['RequirementShowName'];
        }
        if (isset($map['SectionId'])) {
            $model->sectionId = $map['SectionId'];
        }
        if (isset($map['SectionShowName'])) {
            $model->sectionShowName = $map['SectionShowName'];
        }
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }
        if (isset($map['StandardShowName'])) {
            $model->standardShowName = $map['StandardShowName'];
        }

        return $model;
    }
}
