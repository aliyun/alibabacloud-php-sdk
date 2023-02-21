<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcCompetitorsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $competitionBrandIntroduction;

    /**
     * @var string
     */
    public $competitionEntAddress;

    /**
     * @example 2007-06-08
     *
     * @var string
     */
    public $competitionEntEsDate;

    /**
     * @var string
     */
    public $competitionEntFinTurn;

    /**
     * @var string
     */
    public $competitionEntName;

    /**
     * @var string
     */
    public $competitionIntroduction;

    /**
     * @example https://pic.jingdata.com/com_logo_v3/logo_off_69997171.jpg
     *
     * @var string
     */
    public $competitionLogoUrl;

    /**
     * @var string
     */
    public $competitionProductName;

    /**
     * @var string
     */
    public $competitionTag;

    /**
     * @example http://www.chinarsgeo.com/
     *
     * @var string
     */
    public $competitionWebsite;

    /**
     * @var string
     */
    public $entName;
    protected $_name = [
        'competitionBrandIntroduction' => 'CompetitionBrandIntroduction',
        'competitionEntAddress'        => 'CompetitionEntAddress',
        'competitionEntEsDate'         => 'CompetitionEntEsDate',
        'competitionEntFinTurn'        => 'CompetitionEntFinTurn',
        'competitionEntName'           => 'CompetitionEntName',
        'competitionIntroduction'      => 'CompetitionIntroduction',
        'competitionLogoUrl'           => 'CompetitionLogoUrl',
        'competitionProductName'       => 'CompetitionProductName',
        'competitionTag'               => 'CompetitionTag',
        'competitionWebsite'           => 'CompetitionWebsite',
        'entName'                      => 'EntName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->competitionBrandIntroduction) {
            $res['CompetitionBrandIntroduction'] = $this->competitionBrandIntroduction;
        }
        if (null !== $this->competitionEntAddress) {
            $res['CompetitionEntAddress'] = $this->competitionEntAddress;
        }
        if (null !== $this->competitionEntEsDate) {
            $res['CompetitionEntEsDate'] = $this->competitionEntEsDate;
        }
        if (null !== $this->competitionEntFinTurn) {
            $res['CompetitionEntFinTurn'] = $this->competitionEntFinTurn;
        }
        if (null !== $this->competitionEntName) {
            $res['CompetitionEntName'] = $this->competitionEntName;
        }
        if (null !== $this->competitionIntroduction) {
            $res['CompetitionIntroduction'] = $this->competitionIntroduction;
        }
        if (null !== $this->competitionLogoUrl) {
            $res['CompetitionLogoUrl'] = $this->competitionLogoUrl;
        }
        if (null !== $this->competitionProductName) {
            $res['CompetitionProductName'] = $this->competitionProductName;
        }
        if (null !== $this->competitionTag) {
            $res['CompetitionTag'] = $this->competitionTag;
        }
        if (null !== $this->competitionWebsite) {
            $res['CompetitionWebsite'] = $this->competitionWebsite;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
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
        if (isset($map['CompetitionBrandIntroduction'])) {
            $model->competitionBrandIntroduction = $map['CompetitionBrandIntroduction'];
        }
        if (isset($map['CompetitionEntAddress'])) {
            $model->competitionEntAddress = $map['CompetitionEntAddress'];
        }
        if (isset($map['CompetitionEntEsDate'])) {
            $model->competitionEntEsDate = $map['CompetitionEntEsDate'];
        }
        if (isset($map['CompetitionEntFinTurn'])) {
            $model->competitionEntFinTurn = $map['CompetitionEntFinTurn'];
        }
        if (isset($map['CompetitionEntName'])) {
            $model->competitionEntName = $map['CompetitionEntName'];
        }
        if (isset($map['CompetitionIntroduction'])) {
            $model->competitionIntroduction = $map['CompetitionIntroduction'];
        }
        if (isset($map['CompetitionLogoUrl'])) {
            $model->competitionLogoUrl = $map['CompetitionLogoUrl'];
        }
        if (isset($map['CompetitionProductName'])) {
            $model->competitionProductName = $map['CompetitionProductName'];
        }
        if (isset($map['CompetitionTag'])) {
            $model->competitionTag = $map['CompetitionTag'];
        }
        if (isset($map['CompetitionWebsite'])) {
            $model->competitionWebsite = $map['CompetitionWebsite'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }

        return $model;
    }
}
