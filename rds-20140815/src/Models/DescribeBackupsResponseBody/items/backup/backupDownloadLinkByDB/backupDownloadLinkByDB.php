<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup\backupDownloadLinkByDB;

use AlibabaCloud\Tea\Model;

class backupDownloadLinkByDB extends Model
{
    /**
     * @description The name of the database.
     *
     * @example dbs
     *
     * @var string
     */
    public $dataBase;

    /**
     * @description The public URL from which you can download the backup set.
     *
     * @example https://cn-hangzhou.bak.rds.aliyuncs.com/custins53664665/hins18676859_2021072909473127987849.zip?Expires=*****&dbList=tb1
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @description The internal URL from which you can download the backup set.
     *
     * @example https://cn-hangzhou-internal.bak.rds.aliyuncs.com/custins53664665/hins18676859_2021072909473127987849.zip?Expires=*****&dbList=tb1
     *
     * @var string
     */
    public $intranetDownloadLink;
    protected $_name = [
        'dataBase'             => 'DataBase',
        'downloadLink'         => 'DownloadLink',
        'intranetDownloadLink' => 'IntranetDownloadLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataBase) {
            $res['DataBase'] = $this->dataBase;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupDownloadLinkByDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataBase'])) {
            $model->dataBase = $map['DataBase'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }

        return $model;
    }
}
