<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @var string
     */
    public $matchCriteria;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'matchCriteria' => 'MatchCriteria',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
