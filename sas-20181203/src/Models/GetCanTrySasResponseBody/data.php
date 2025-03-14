<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCanTrySasResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the user is qualified for the trial use. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var int
     */
    public $canTry;

    /**
     * @description The editions that are allowed for the trial use.
     *
     * @var int[]
     */
    public $canTryVersions;

    /**
     * @description The trial type. Valid values:
     *
     *   **0**: trial prohibited
     *   **1**: first trial
     *   **2**: second trial
     *
     * @example 1
     *
     * @var int
     */
    public $tryType;
    protected $_name = [
        'canTry' => 'CanTry',
        'canTryVersions' => 'CanTryVersions',
        'tryType' => 'TryType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->canTry) {
            $res['CanTry'] = $this->canTry;
        }
        if (null !== $this->canTryVersions) {
            $res['CanTryVersions'] = $this->canTryVersions;
        }
        if (null !== $this->tryType) {
            $res['TryType'] = $this->tryType;
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
        if (isset($map['CanTry'])) {
            $model->canTry = $map['CanTry'];
        }
        if (isset($map['CanTryVersions'])) {
            if (!empty($map['CanTryVersions'])) {
                $model->canTryVersions = $map['CanTryVersions'];
            }
        }
        if (isset($map['TryType'])) {
            $model->tryType = $map['TryType'];
        }

        return $model;
    }
}
