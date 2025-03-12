<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class RollbackSuspEventQuaraFileRequest extends Model
{
    /**
     * @description The ID of the request source. Set the value to sas.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID of the quarantined file.
     * > If you do not configure this parameter, you cannot call the RollbackSuspEventQuaraFile operation to restore a quarantined file. You can call the [DescribeSuspEventQuaraFiles](~~DescribeSuspEventQuaraFiles~~) operation to query the IDs of quarantined files.
     * @example 3921797
     *
     * @var int
     */
    public $quaraFileId;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.3.4
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'from'        => 'From',
        'quaraFileId' => 'QuaraFileId',
        'sourceIp'    => 'SourceIp',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackSuspEventQuaraFileRequest
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
