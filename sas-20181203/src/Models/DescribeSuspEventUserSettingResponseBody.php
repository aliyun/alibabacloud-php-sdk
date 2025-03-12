<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventUserSettingResponseBody extends Model
{
    /**
     * @description An array that consists of the risk levels of alert notifications. Valid values:
     *
     *   **remind**
     *   **suspicious**
     *   **serious**
     *
     * @var string[]
     */
    public $levelsOn;

    /**
     * @description The ID of the request.
     *
     * @example 028CF634-5268-5660-9575-48C9ED6XXXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'levelsOn'  => 'LevelsOn',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levelsOn) {
            $res['LevelsOn'] = $this->levelsOn;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventUserSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LevelsOn'])) {
            if (!empty($map['LevelsOn'])) {
                $model->levelsOn = $map['LevelsOn'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
