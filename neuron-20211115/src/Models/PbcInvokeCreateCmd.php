<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcInvokeCreateCmd extends Model
{
    /**
     * @var string
     */
    public $applicant;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $invokePbcId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $reviewer;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var bool
     */
    public $visible;
    protected $_name = [
        'applicant' => 'applicant',
        'companyId' => 'companyId',
        'invokePbcId' => 'invokePbcId',
        'marketId' => 'marketId',
        'pbcId' => 'pbcId',
        'reviewer' => 'reviewer',
        'usage' => 'usage',
        'visible' => 'visible',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = $this->applicant;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->invokePbcId) {
            $res['invokePbcId'] = $this->invokePbcId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->reviewer) {
            $res['reviewer'] = $this->reviewer;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }

        if (null !== $this->visible) {
            $res['visible'] = $this->visible;
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
        if (isset($map['applicant'])) {
            $model->applicant = $map['applicant'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['invokePbcId'])) {
            $model->invokePbcId = $map['invokePbcId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['reviewer'])) {
            $model->reviewer = $map['reviewer'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        if (isset($map['visible'])) {
            $model->visible = $map['visible'];
        }

        return $model;
    }
}
