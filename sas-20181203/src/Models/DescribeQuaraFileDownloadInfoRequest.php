<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeQuaraFileDownloadInfoRequest extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $quaraFileId;
    protected $_name = [
        'from'        => 'From',
        'quaraFileId' => 'QuaraFileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->quaraFileId) {
            $res['QuaraFileId'] = $this->quaraFileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQuaraFileDownloadInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['QuaraFileId'])) {
            $model->quaraFileId = $map['QuaraFileId'];
        }

        return $model;
    }
}
