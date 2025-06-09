<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody\meta;

use AlibabaCloud\Dara\Model;

class phraseQueryInfo extends Model
{
    /**
     * @var int
     */
    public $beginOffset;

    /**
     * @var int
     */
    public $endOffset;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $scanAll;
    protected $_name = [
        'beginOffset' => 'beginOffset',
        'endOffset' => 'endOffset',
        'endTime' => 'endTime',
        'scanAll' => 'scanAll',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginOffset) {
            $res['beginOffset'] = $this->beginOffset;
        }

        if (null !== $this->endOffset) {
            $res['endOffset'] = $this->endOffset;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->scanAll) {
            $res['scanAll'] = $this->scanAll;
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
        if (isset($map['beginOffset'])) {
            $model->beginOffset = $map['beginOffset'];
        }

        if (isset($map['endOffset'])) {
            $model->endOffset = $map['endOffset'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['scanAll'])) {
            $model->scanAll = $map['scanAll'];
        }

        return $model;
    }
}
