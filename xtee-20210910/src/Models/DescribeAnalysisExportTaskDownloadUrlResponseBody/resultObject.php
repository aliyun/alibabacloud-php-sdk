<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisExportTaskDownloadUrlResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $downloadFileUrl;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'downloadFileUrl' => 'downloadFileUrl',
        'executeTime' => 'executeTime',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadFileUrl) {
            $res['downloadFileUrl'] = $this->downloadFileUrl;
        }

        if (null !== $this->executeTime) {
            $res['executeTime'] = $this->executeTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['downloadFileUrl'])) {
            $model->downloadFileUrl = $map['downloadFileUrl'];
        }

        if (isset($map['executeTime'])) {
            $model->executeTime = $map['executeTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
