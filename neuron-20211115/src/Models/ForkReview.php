<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ForkReview extends Model
{
    /**
     * @var string
     */
    public $applicant;

    /**
     * @var int
     */
    public $forkId;

    /**
     * @var string
     */
    public $gitGroup;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $pbcName;

    /**
     * @var string[]
     */
    public $repoUrls;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $reviewer;

    /**
     * @var string
     */
    public $reviewerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'applicant' => 'applicant',
        'forkId' => 'forkId',
        'gitGroup' => 'gitGroup',
        'id' => 'id',
        'pbcName' => 'pbcName',
        'repoUrls' => 'repoUrls',
        'requestId' => 'requestId',
        'reviewer' => 'reviewer',
        'reviewerId' => 'reviewerId',
        'status' => 'status',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->repoUrls)) {
            Model::validateArray($this->repoUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = $this->applicant;
        }

        if (null !== $this->forkId) {
            $res['forkId'] = $this->forkId;
        }

        if (null !== $this->gitGroup) {
            $res['gitGroup'] = $this->gitGroup;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->pbcName) {
            $res['pbcName'] = $this->pbcName;
        }

        if (null !== $this->repoUrls) {
            if (\is_array($this->repoUrls)) {
                $res['repoUrls'] = [];
                $n1 = 0;
                foreach ($this->repoUrls as $item1) {
                    $res['repoUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->reviewer) {
            $res['reviewer'] = $this->reviewer;
        }

        if (null !== $this->reviewerId) {
            $res['reviewerId'] = $this->reviewerId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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

        if (isset($map['forkId'])) {
            $model->forkId = $map['forkId'];
        }

        if (isset($map['gitGroup'])) {
            $model->gitGroup = $map['gitGroup'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['pbcName'])) {
            $model->pbcName = $map['pbcName'];
        }

        if (isset($map['repoUrls'])) {
            if (!empty($map['repoUrls'])) {
                $model->repoUrls = [];
                $n1 = 0;
                foreach ($map['repoUrls'] as $item1) {
                    $model->repoUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['reviewer'])) {
            $model->reviewer = $map['reviewer'];
        }

        if (isset($map['reviewerId'])) {
            $model->reviewerId = $map['reviewerId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
