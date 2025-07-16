<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeOpenBackupSetResponseBody extends Model
{
    /**
     * @example {"gmsBackupSet": {"pubFullDownloadUrl": "https://xxxxx","dnName": "pxc-xdb-m-xxxxxx","hostInstanceId": 0001,"binlogs": [],"backupEndTime": "2024-10-21T10:11:56Z","backupLinkExpiredTime": "2024-10-23T06:13:54Z","dnBackupSetId": "00088","notCompletedBinlogs": [],"commitIndex": "15249275","innerFullDownloadUrl": "http://xxxxx","backupStartTime": "2024-10-21T10:09:20Z","backupSetSize": 526118912},"dnBackupSets": [],"insName": "pxc-xxxxx","backupSetId": "cb-xxxxx","canBinlogRecoverToTime": 1729567925000,"backupEndTime": "2024-10-21T10:12:16Z","canBinlogRecoverToTimeUTC": "2024-10-22T03:32:05Z","canBackupMinRecoverToTimeUTC": "2024-10-21T10:11:56Z","pitrInvalid": false,"backupStartTime": "2024-10-21T10:09:16Z","canBackupMinRecoverToTime": 1729505516000}
     *
     * @var mixed
     */
    public $data;

    /**
     * @example FEA5DC20-6D8A-5979-97AA-FC57546ADC20
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpenBackupSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
