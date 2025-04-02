<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetImageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $currentVersionFullShowName;

    /**
     * @var string
     */
    public $maxVersionChangelogUrl;

    /**
     * @var string
     */
    public $maxVersionCode;

    /**
     * @var string
     */
    public $maxVersionFullShowName;
    protected $_name = [
        'currentVersionFullShowName' => 'CurrentVersionFullShowName',
        'maxVersionChangelogUrl' => 'MaxVersionChangelogUrl',
        'maxVersionCode' => 'MaxVersionCode',
        'maxVersionFullShowName' => 'MaxVersionFullShowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentVersionFullShowName) {
            $res['CurrentVersionFullShowName'] = $this->currentVersionFullShowName;
        }

        if (null !== $this->maxVersionChangelogUrl) {
            $res['MaxVersionChangelogUrl'] = $this->maxVersionChangelogUrl;
        }

        if (null !== $this->maxVersionCode) {
            $res['MaxVersionCode'] = $this->maxVersionCode;
        }

        if (null !== $this->maxVersionFullShowName) {
            $res['MaxVersionFullShowName'] = $this->maxVersionFullShowName;
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
        if (isset($map['CurrentVersionFullShowName'])) {
            $model->currentVersionFullShowName = $map['CurrentVersionFullShowName'];
        }

        if (isset($map['MaxVersionChangelogUrl'])) {
            $model->maxVersionChangelogUrl = $map['MaxVersionChangelogUrl'];
        }

        if (isset($map['MaxVersionCode'])) {
            $model->maxVersionCode = $map['MaxVersionCode'];
        }

        if (isset($map['MaxVersionFullShowName'])) {
            $model->maxVersionFullShowName = $map['MaxVersionFullShowName'];
        }

        return $model;
    }
}
