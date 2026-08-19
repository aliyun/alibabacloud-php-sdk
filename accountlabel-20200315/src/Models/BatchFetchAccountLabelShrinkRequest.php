<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315\Models;

use AlibabaCloud\Dara\Model;

class BatchFetchAccountLabelShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $instant;

    /**
     * @var string
     */
    public $labelSeriesListShrink;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var int
     */
    public $pk;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'instant' => 'Instant',
        'labelSeriesListShrink' => 'LabelSeriesList',
        'organization' => 'Organization',
        'pk' => 'Pk',
        'token' => 'Token',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instant) {
            $res['Instant'] = $this->instant;
        }

        if (null !== $this->labelSeriesListShrink) {
            $res['LabelSeriesList'] = $this->labelSeriesListShrink;
        }

        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Instant'])) {
            $model->instant = $map['Instant'];
        }

        if (isset($map['LabelSeriesList'])) {
            $model->labelSeriesListShrink = $map['LabelSeriesList'];
        }

        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
