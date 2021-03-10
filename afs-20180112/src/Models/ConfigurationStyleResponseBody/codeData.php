<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\ConfigurationStyleResponseBody;

use AlibabaCloud\Tea\Model;

class codeData extends Model
{
    /**
     * @var string
     */
    public $nodeJs;

    /**
     * @var string
     */
    public $javaUrl;

    /**
     * @var string
     */
    public $python;

    /**
     * @var string
     */
    public $java;

    /**
     * @var string
     */
    public $nodeJsUrl;

    /**
     * @var string
     */
    public $pythonUrl;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $phpUrl;

    /**
     * @var string
     */
    public $netUrl;

    /**
     * @var string
     */
    public $php;

    /**
     * @var string
     */
    public $net;
    protected $_name = [
        'nodeJs'    => 'NodeJs',
        'javaUrl'   => 'JavaUrl',
        'python'    => 'Python',
        'java'      => 'Java',
        'nodeJsUrl' => 'NodeJsUrl',
        'pythonUrl' => 'PythonUrl',
        'html'      => 'Html',
        'phpUrl'    => 'PhpUrl',
        'netUrl'    => 'NetUrl',
        'php'       => 'Php',
        'net'       => 'Net',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeJs) {
            $res['NodeJs'] = $this->nodeJs;
        }
        if (null !== $this->javaUrl) {
            $res['JavaUrl'] = $this->javaUrl;
        }
        if (null !== $this->python) {
            $res['Python'] = $this->python;
        }
        if (null !== $this->java) {
            $res['Java'] = $this->java;
        }
        if (null !== $this->nodeJsUrl) {
            $res['NodeJsUrl'] = $this->nodeJsUrl;
        }
        if (null !== $this->pythonUrl) {
            $res['PythonUrl'] = $this->pythonUrl;
        }
        if (null !== $this->html) {
            $res['Html'] = $this->html;
        }
        if (null !== $this->phpUrl) {
            $res['PhpUrl'] = $this->phpUrl;
        }
        if (null !== $this->netUrl) {
            $res['NetUrl'] = $this->netUrl;
        }
        if (null !== $this->php) {
            $res['Php'] = $this->php;
        }
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return codeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeJs'])) {
            $model->nodeJs = $map['NodeJs'];
        }
        if (isset($map['JavaUrl'])) {
            $model->javaUrl = $map['JavaUrl'];
        }
        if (isset($map['Python'])) {
            $model->python = $map['Python'];
        }
        if (isset($map['Java'])) {
            $model->java = $map['Java'];
        }
        if (isset($map['NodeJsUrl'])) {
            $model->nodeJsUrl = $map['NodeJsUrl'];
        }
        if (isset($map['PythonUrl'])) {
            $model->pythonUrl = $map['PythonUrl'];
        }
        if (isset($map['Html'])) {
            $model->html = $map['Html'];
        }
        if (isset($map['PhpUrl'])) {
            $model->phpUrl = $map['PhpUrl'];
        }
        if (isset($map['NetUrl'])) {
            $model->netUrl = $map['NetUrl'];
        }
        if (isset($map['Php'])) {
            $model->php = $map['Php'];
        }
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }

        return $model;
    }
}
