<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDownloadLinkDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class backupDownloadLinkByDB extends Model
{
    /**
     * @description 数据库名称
     *
     * @var string
     */
    public $dataBase;

    /**
     * @description 下载链接
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @description 内网下载链接
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
