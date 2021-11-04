<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus;

use AlibabaCloud\Tea\Model;

class checkStatusResult extends Model
{
    /**
     * @var int
     */
    public $checkNotPass;

    /**
     * @var int
     */
    public $checkPass;

    /**
     * @var int
     */
    public $forceNotPass;

    /**
     * @var int
     */
    public $forcePass;

    /**
     * @var int
     */
    public $new;

    /**
     * @var int
     */
    public $unknown;
    protected $_name = [
        'checkNotPass' => 'CheckNotPass',
        'checkPass'    => 'CheckPass',
        'forceNotPass' => 'ForceNotPass',
        'forcePass'    => 'ForcePass',
        'new'          => 'New',
        'unknown'      => 'Unknown',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkNotPass) {
            $res['CheckNotPass'] = $this->checkNotPass;
        }
        if (null !== $this->checkPass) {
            $res['CheckPass'] = $this->checkPass;
        }
        if (null !== $this->forceNotPass) {
            $res['ForceNotPass'] = $this->forceNotPass;
        }
        if (null !== $this->forcePass) {
            $res['ForcePass'] = $this->forcePass;
        }
        if (null !== $this->new) {
            $res['New'] = $this->new;
        }
        if (null !== $this->unknown) {
            $res['Unknown'] = $this->unknown;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkStatusResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckNotPass'])) {
            $model->checkNotPass = $map['CheckNotPass'];
        }
        if (isset($map['CheckPass'])) {
            $model->checkPass = $map['CheckPass'];
        }
        if (isset($map['ForceNotPass'])) {
            $model->forceNotPass = $map['ForceNotPass'];
        }
        if (isset($map['ForcePass'])) {
            $model->forcePass = $map['ForcePass'];
        }
        if (isset($map['New'])) {
            $model->new = $map['New'];
        }
        if (isset($map['Unknown'])) {
            $model->unknown = $map['Unknown'];
        }

        return $model;
    }
}
