<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315\Models;

use AlibabaCloud\Dara\Model;

class BatchFetchAccountLabelRequest extends Model
{
    /**
     * @var bool
     */
    public $instant;

    /**
     * @var string[]
     */
    public $labelSeriesList;

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
        'labelSeriesList' => 'LabelSeriesList',
        'organization' => 'Organization',
        'pk' => 'Pk',
        'token' => 'Token',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->labelSeriesList)) {
            Model::validateArray($this->labelSeriesList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instant) {
            $res['Instant'] = $this->instant;
        }

        if (null !== $this->labelSeriesList) {
            if (\is_array($this->labelSeriesList)) {
                $res['LabelSeriesList'] = [];
                $n1 = 0;
                foreach ($this->labelSeriesList as $item1) {
                    $res['LabelSeriesList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['LabelSeriesList'])) {
                $model->labelSeriesList = [];
                $n1 = 0;
                foreach ($map['LabelSeriesList'] as $item1) {
                    $model->labelSeriesList[$n1] = $item1;
                    ++$n1;
                }
            }
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
