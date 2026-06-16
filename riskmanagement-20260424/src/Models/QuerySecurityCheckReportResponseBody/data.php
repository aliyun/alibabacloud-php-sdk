<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\QuerySecurityCheckReportResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $cloudSecurityGuide;

    /**
     * @var int
     */
    public $configCheckNumber;

    /**
     * @var int
     */
    public $contactCheckNumber;

    /**
     * @var int
     */
    public $riskEventNumber;

    /**
     * @var int
     */
    public $sasCheckNumber;

    /**
     * @var int
     */
    public $securityStatus;

    /**
     * @var string
     */
    public $suggestionText;
    protected $_name = [
        'cloudSecurityGuide' => 'CloudSecurityGuide',
        'configCheckNumber' => 'ConfigCheckNumber',
        'contactCheckNumber' => 'ContactCheckNumber',
        'riskEventNumber' => 'RiskEventNumber',
        'sasCheckNumber' => 'SasCheckNumber',
        'securityStatus' => 'SecurityStatus',
        'suggestionText' => 'SuggestionText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudSecurityGuide) {
            $res['CloudSecurityGuide'] = $this->cloudSecurityGuide;
        }

        if (null !== $this->configCheckNumber) {
            $res['ConfigCheckNumber'] = $this->configCheckNumber;
        }

        if (null !== $this->contactCheckNumber) {
            $res['ContactCheckNumber'] = $this->contactCheckNumber;
        }

        if (null !== $this->riskEventNumber) {
            $res['RiskEventNumber'] = $this->riskEventNumber;
        }

        if (null !== $this->sasCheckNumber) {
            $res['SasCheckNumber'] = $this->sasCheckNumber;
        }

        if (null !== $this->securityStatus) {
            $res['SecurityStatus'] = $this->securityStatus;
        }

        if (null !== $this->suggestionText) {
            $res['SuggestionText'] = $this->suggestionText;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudSecurityGuide'])) {
            $model->cloudSecurityGuide = $map['CloudSecurityGuide'];
        }

        if (isset($map['ConfigCheckNumber'])) {
            $model->configCheckNumber = $map['ConfigCheckNumber'];
        }

        if (isset($map['ContactCheckNumber'])) {
            $model->contactCheckNumber = $map['ContactCheckNumber'];
        }

        if (isset($map['RiskEventNumber'])) {
            $model->riskEventNumber = $map['RiskEventNumber'];
        }

        if (isset($map['SasCheckNumber'])) {
            $model->sasCheckNumber = $map['SasCheckNumber'];
        }

        if (isset($map['SecurityStatus'])) {
            $model->securityStatus = $map['SecurityStatus'];
        }

        if (isset($map['SuggestionText'])) {
            $model->suggestionText = $map['SuggestionText'];
        }

        return $model;
    }
}
